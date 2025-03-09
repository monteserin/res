using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    public GameObject cubePrefab;
    public GameObject cubes;
    const int size = 5;
    float inputX, inputY;
    Vector3 posIni;
    float speed = 25;
    public GameObject ballPrefab;
   

    private void Start()
    {
        GameObject ball = Instantiate(ballPrefab, Vector2.zero, Quaternion.identity);

        ball.transform.position = new Vector3(size/2, size+1, size/2);
        posIni = new Vector3(2f, 2f, 2f);
        for (int i = 0; i < size; i++)
        {

            for (int j = 0; j < size; j++)
            {
                for (int k = 0; k < size; k++)
                {
                    int n = Random.Range(0, 3);
                    if (n == 0)
                    {
                        GameObject go = Instantiate(cubePrefab, Vector2.zero, Quaternion.identity);
                        go.transform.SetParent(cubes.transform);
                        go.transform.Translate(Vector3.right * i + Vector3.up * j + Vector3.forward * k);
                        go.GetComponent<Renderer>().material.color = Random.ColorHSV(0f, 1f, 1f, 1f, 0.5f, 1f);
                    }

                }

            }

        }
    }

    private void Update()
    {
        inputX = Input.GetAxisRaw("Horizontal");
        inputY = Input.GetAxisRaw("Vertical");

        Move();
    }

    void Move()
    {
        cubes.transform.RotateAround(posIni, Vector3.up, inputX * speed * Time.deltaTime);
        cubes.transform.RotateAround(posIni, Vector3.right, inputY * speed * Time.deltaTime);
    }
}
