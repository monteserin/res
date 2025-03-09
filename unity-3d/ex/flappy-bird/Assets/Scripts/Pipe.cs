using System.Collections;
using System.Collections.Generic;
using UnityEngine;
public class Pipe : MonoBehaviour
{
    int speed = 3;

    void Update()
    {
        this.transform.Translate(-speed * Time.deltaTime, 0, 0);
        if (transform.position.x < Utils.GetLeftSide())
        {
           Destroy(gameObject);
        }
    }
}
