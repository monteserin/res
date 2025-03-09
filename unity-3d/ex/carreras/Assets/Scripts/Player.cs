using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class Player : MonoBehaviour
{
	Rigidbody2D rb;
    int speed = -2;
    public KeyCode left;
    public KeyCode right;
    public TextMeshPro counterText;
    int counter; 
    int marker = 0; 

    private void Start()
    {
        rb = GetComponent<Rigidbody2D>();
    }
    void Update()
	{
        Move();
	}

    void Move()
    {
        if(Input.GetKey(left))
        {
            transform.Rotate(0, 0, 90 * Time.deltaTime);
        }else if(Input.GetKey(right))
        {
            transform.Rotate(0, 0, -90 * Time.deltaTime);
        }
        rb.velocity = transform.right * speed;

    }

 

    void OnTriggerEnter2D(Collider2D col)
    {
        if (col.gameObject.name == "Marker1" && marker == 0)
        {
            marker++;
        }
        else if (col.gameObject.name == "Marker2" && marker == 1)
        {
            marker++;
        }
        else if (col.gameObject.name == "Marker3" && marker == 2)
        {
            marker++;
        }
        else if (col.gameObject.name == "Marker4" && marker == 3)
        {
            marker++;
        }
        else if (col.gameObject.tag == "Finish" && marker == 4)
        {
            marker = 0;
            counter++;
            counterText.text = "" + counter;
            if(counter == 2)
            {
                UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");
            }
        }
    }
}
