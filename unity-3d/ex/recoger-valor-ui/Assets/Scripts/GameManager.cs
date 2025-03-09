using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class GameManager : MonoBehaviour
{

    public void ShowValue()
    {
        string valor = GameObject.Find("Input").GetComponent<TMP_InputField>().text;
        GameObject.Find("Output").GetComponent<TMP_Text>().text = valor;
    }
}
