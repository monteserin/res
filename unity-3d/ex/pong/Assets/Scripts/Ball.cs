using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Ball: MonoBehaviour{
    float leftLimit, rightLimit;
    void Start(){
        leftLimit = Utils.GetLeftSide() + GetComponent<BoxCollider2D>().size.x / 2;
       rightLimit = Utils.GetRightSide() - GetComponent<BoxCollider2D>().size.x / 2;

        NewGame();
    }

    void NewGame()
    {
        transform.position = Vector2.zero;
        float speed = 4;
        int directionX = Random.Range(0, 2) == 0 ? 1 : -1;
        int directionY = Random.Range(0, 2) == 0 ? 1 : -1;

        GetComponent<Rigidbody2D>().velocity = new Vector2(directionX * speed, directionY * speed);
    }
    private void Update()
    {
        if(transform.position.x < leftLimit || transform.position.x > rightLimit)
        {
            NewGame();
        }
    }
}
