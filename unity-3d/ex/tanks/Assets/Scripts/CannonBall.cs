using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CannonBall : MonoBehaviour
{
    public int power { get; set; }
    public GameObject player { get; set; }


    void Start()
    {
        GetComponent<Rigidbody2D>().velocity = transform.up * power;
    }

    private void OnCollisionEnter2D(Collision2D collision)
    {
        if (collision.gameObject.tag == "Player" && collision.gameObject.transform.parent.name != player.name)
        {
            player.GetComponent<Player>().UpdatePoints();
        }
    }
}
