package com.pablomonteserin.arrays;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Arrays;

public class TresEnRayaUnJugador {
	public static void main(String[] args) throws NumberFormatException, IOException {
		String[] tablero = { "_", "_", "_", "_", "_", "_", "_", "_", "_" };
		int tirada = 0;
		boolean alguienGano = false;
		do {
			showTablero(tablero);
			String ficha = tirada % 2 == 0 ? "X" : "O";
			juegaPlayer(ficha, tablero);

			alguienGano = evaluateWin(tablero);
			if (alguienGano)
				System.out.println("Enhorabuena, player " + ficha);
			tirada++;
		} while (!alguienGano);

	}

	static void showTablero(String[] tablero) {
		System.out.println(tablero[0] + " | " + tablero[1] + " | " + tablero[2]);
		System.out.println(tablero[3] + " | " + tablero[4] + " | " + tablero[5]);
		System.out.println(tablero[6] + " | " + tablero[7] + " | " + tablero[8]);
	}

	static void juegaPlayer(String ficha, String[] tablero) throws NumberFormatException, IOException {
		if (ficha.equals("X")) {
			BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

			System.out.println("¿Donde quieres mover, jugador " + ficha + "?");
			int posicion = Integer.parseInt(br.readLine());

			tablero[posicion] = ficha;
		} else {
			int posicion = getComputerMove(tablero);
			tablero[posicion] = ficha;
		}
	}

	static boolean evaluateWin(String tablero[]) {
		if (tablero[0].equals(tablero[1]) && tablero[0].equals(tablero[2]) && !tablero[0].equals("_")) {
			return true;
		} else if (tablero[3].equals(tablero[4]) && tablero[3].equals(tablero[5]) && !tablero[3].equals("_")) {
			return true;
		} else if (tablero[6].equals(tablero[7]) && tablero[6].equals(tablero[8]) && !tablero[6].equals("_")) {
			return true;
		} else if (tablero[0].equals(tablero[3]) && tablero[0].equals(tablero[6]) && !tablero[0].equals("_")) {
			return true;
		} else if (tablero[1].equals(tablero[4]) && tablero[1].equals(tablero[7]) && !tablero[1].equals("_")) {
			return true;
		} else if (tablero[2].equals(tablero[5]) && tablero[2].equals(tablero[8]) && !tablero[2].equals("_")) {
			return true;
		} else if (tablero[0].equals(tablero[4]) && tablero[0].equals(tablero[8]) && !tablero[0].equals("_")) {
			return true;
		} else if (tablero[2].equals(tablero[4]) && tablero[2].equals(tablero[6]) && !tablero[2].equals("_")) {
			return true;
		}

		return false;
	}

	static int getComputerMove(String[] tablero) {

		// 1 - Comprobamos si la máquina puede hacer un movimiento y ganar la partida
		for (int i = 0; i < tablero.length; i++) {
			String[] tablero2 = tablero.clone();

			if (tablero2[i].equals("_")) {
				tablero2[i] = "X";
				if (evaluateWin(tablero2)) {
					return i;

				}
			}
		}
		// 2 - Comprobamos si tras mover, el humano puede hacer un movimiento y ganar la
		// partida
		String[] tablero2 = tablero.clone();

		for (int i = 0; i < tablero2.length; i++) {

			if (tablero2[i].equals("_")) {
				tablero2[i] = "X";
				if (evaluateWin(tablero2)) {
					return i;

				}
			}
		}
		// 3 - Comprueba si hay alguna esquina libre. Si lo está, la máquina mueve a la
		// esquina.
		ArrayList<Integer> corners = new ArrayList<Integer>(Arrays.asList(0, 2, 6, 8));
		while (corners.size() > 0) {
			int randomIndex = getRandomPositionInArray(corners);
			int randomCorner = corners.get(randomIndex);
			if (tablero[randomCorner].equals("_")) {
				return randomCorner;
			} else {
				corners.remove(randomIndex);
			}
		}
		// 4 - Comprueba si el centro está libre. Si lo está, la máquina mueve al centro
		if (tablero[4].equals("_")) {
			return 4;
		}

		// 5 - Mueve a cualquiera de las casillas restantes
		ArrayList<Integer> sides = new ArrayList<Integer>(Arrays.asList(1, 3, 5, 7));
		while (sides.size() > 0) {
			int randomIndex = getRandomPositionInArray(sides);
			int randomSide = sides.get(randomIndex);
			System.out.println(tablero[randomSide]);
			if (tablero[randomSide].equals("_")) {
				System.out.println("aaaaaa");
				return randomSide;
			} else {
				sides.remove(randomIndex);
				;
			}
		}
		return -1;

	}

	static int getRandomPositionInArray(ArrayList<Integer> array) {
		int randomNumber = (int) Math.floor(Math.random() * array.size());
		return randomNumber;
	}
}
