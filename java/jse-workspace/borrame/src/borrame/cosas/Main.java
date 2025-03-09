package borrame.cosas;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;

public class Main {

	public static void main(String[] args) {
		System.out.println("antes");
		try{
			System.out.println("en el try");
			System.out.println(2/0);
		}catch(Throwable t){
			System.out.println("en catch3");
			t.printStackTrace();
		}finally {
			System.out.println("finally");
		}
	
		System.out.println("despues");
	}
}