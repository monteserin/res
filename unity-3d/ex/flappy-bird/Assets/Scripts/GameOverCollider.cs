using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameOverCollider : MonoBehaviour
{
    private void OnTriggerEnter2D(Collider2D collision)
    {
        if(collision.gameObject.tag == "Player")
        {
            print(222);
            UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");
        }
    }
}
