using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Player : MonoBehaviour
{
    public KeyCode up;
    public KeyCode down;
    float speedY = 2;
    float bottomLimit, topLimit;

    void Start()
    {
        bottomLimit = Utils.GetBottomSide() + GetComponent<BoxCollider2D>().size.y / 2;
        topLimit = Utils.GetTopSide() - GetComponent<BoxCollider2D>().size.y / 2;
    }
    void Update()
    {
        Move();
    }

    void Move()
    {
        if (Input.GetKey(up) && transform.position.y < topLimit)
        {
            transform.Translate(0, speedY * Time.deltaTime, 0);
        }
        else if (Input.GetKey(down) && transform.position.y > bottomLimit)
        {
            transform.Translate(0, -speedY * Time.deltaTime, 0);
        }

    }
}
