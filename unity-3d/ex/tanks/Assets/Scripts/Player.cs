using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class Player : MonoBehaviour
{
    static int totalInstances;
    static int currentInstance;
    public GameObject cannonBall;
    int points;
    float inputX;
    bool fire;
    public GameObject counter;

    private void Start()
    {
        totalInstances++;
    }
    private void Update()
    {
        if ("Cannon" + currentInstance == name)
        {
            inputX = Input.GetAxisRaw("Horizontal");
            fire = Input.GetButtonDown("Fire1");
            Move();
        }
    }

    void Move()
    {
        transform.Rotate(0, 0, inputX * 30 * Time.deltaTime);

            if (fire)
            {
                GameObject ball = Instantiate(cannonBall, transform.Find("ShootPoint").position, transform.rotation);
                int.TryParse(transform.GetComponentInChildren<TMP_InputField>().text, out int power);
                ball.GetComponentInChildren<CannonBall>().power = power;
                ball.GetComponent<CannonBall>().player = gameObject;
                StartCoroutine(EndTurn());
            }
        
    }

    IEnumerator EndTurn()
    {
        yield return new WaitForEndOfFrame();
        currentInstance = currentInstance == totalInstances - 1 ? 0 : currentInstance + 1;
    }
    public void UpdatePoints()
    {
        points++;
        counter.GetComponent<TextMeshProUGUI>().text = "" + points;
    }

}
