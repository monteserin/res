using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class GameManager : MonoBehaviour
{
    public Sprite[] cardFace;
    public Sprite cardBack;
    public GameObject[] cards;
    private Card primeraCarta;
    private Card segundaCarta;

    void Start()
    {
        for (int id = 0; id < 2; id++)
        {
            for (int i = 0; i < cardFace.Length; i++)
            {
                bool test = false;
                int choice = 0;

                while (!test)
                {
                    choice = Random.Range(0, cards.Length);
                    Debug.Log(cards[choice]);
                    Debug.Log(cards[choice].GetComponent<Card>());

                    //Voy buscando hasta encontrar una carta no inicializada
                    //Si todas las cartas fueron ya inicializadas, obtendré un bucle infinito
                    test = !(cards[choice].GetComponent<Card>().initialized);
                }

                cards[choice].GetComponent<Card>().cardFace = cardFace[i];
                cards[choice].GetComponent<Card>().initialized = true;
            }
        }

    }


    public void evaluarCartas(Card carta)
    {
        if (primeraCarta == null)
        {
      Debug.Log("111111111111111111");
            carta.GetComponent<Image>().sprite = carta.cardFace;
            primeraCarta = carta;
        }
        else if (segundaCarta == null)
        {
      Debug.Log("22222222222222222222222");
            carta.GetComponent<Image>().sprite = carta.cardFace;
            segundaCarta = carta;
            if (primeraCarta.GetComponent<Image>().sprite == segundaCarta.GetComponent<Image>().sprite)
            {
                Debug.Log("exito");
                primeraCarta = null;
                segundaCarta = null;
            }
            else
            {
                StartCoroutine(dejaCartasComoAlPrincipio());
            }
        }
    }

    IEnumerator dejaCartasComoAlPrincipio()
    {
        yield return new WaitForSeconds(1f);
        primeraCarta.GetComponent<Image>().sprite = cardBack;
        segundaCarta.GetComponent<Image>().sprite = cardBack;
        primeraCarta = null;
        segundaCarta = null;
    }
}
