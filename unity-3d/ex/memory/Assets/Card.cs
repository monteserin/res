using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Card : MonoBehaviour
{
    public bool initialized = false;

    public Image cardBack;
    public Sprite cardFace;
    GameManager gc;
    void Start()
    {
        gc = GameObject.Find("GameManager").GetComponent<GameManager>();
        cardBack = GetComponent<Image>();
        cardBack.sprite = gc.cardBack;
        GetComponent<Button>().onClick.AddListener(flipCard);
    }

    public void flipCard()
    {
        GetComponent<Image>().sprite = cardFace;
        gc.evaluarCartas(this);
    }
   
}
