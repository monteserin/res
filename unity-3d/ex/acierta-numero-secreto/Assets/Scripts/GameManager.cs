using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class GameManager : MonoBehaviour
{
    int n;
    // Start is called before the first frame update
    void Start()
    {
        n = Random.Range(1, 3);

    }

    public void EvaluateNumber()
    {
        string valor = GameObject.Find("Input").GetComponent<TMP_InputField>().text;

        string result = "";
        if(valor == "" + n)
        {
            result = "Has acertado";
        }
        else
        {
            result = "Has fallado";
        }
        GameObject.Find("Output").GetComponent<TMP_Text>().text = result;
    }
}
