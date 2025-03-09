using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    private int marker = 3;
    public GameObject misil;
    void Start()
    {
        StartCoroutine(CreateMisil());
    }


    IEnumerator CreateMisil()
    {
        while (true)
        {
            yield return new WaitForSeconds(1.0f);
            float pos = Random.Range(Camera.main.ScreenToWorldPoint(Vector2.zero).x, Camera.main.ScreenToWorldPoint(new Vector2(Screen.width, 0)).x);
            GameObject nuevoMisil = Instantiate(misil, new Vector2(pos, Camera.main.ScreenToWorldPoint(new Vector2(0, Screen.height)).y), Quaternion.identity);

        }
    }
}
