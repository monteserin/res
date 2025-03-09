using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Player : MonoBehaviour
{
    float step;
    Vector3 lastPos;
    bool growingPending;
    float inputX, inputY;
    public GameObject tailPrefab;
    public GameObject foodPrefab;
    public GameObject leftSide;
    public GameObject rightSide;
    public GameObject topSide;
    public GameObject bottomSide;
    public List<Transform> tail = new List<Transform>();


    private void Start()
    {
        step = GetComponent<SpriteRenderer>().bounds.size.x;
        StartCoroutine(MoveCoroutine());
        CreateFood();
    }

    private void Update()
    {
        inputX = Input.GetAxisRaw("Horizontal");
        inputY = Input.GetAxisRaw("Vertical");
    }
    private void Move()
    {
        lastPos = transform.position;
        Vector3 nextPos = Vector3.zero;
        if (inputX!=0)
        {
            nextPos = Vector3.right*inputX;
        }else if (inputY!=0)
        {
            nextPos = Vector3.down*inputY;
        }
        transform.position += nextPos * step;
        MoveTail();
    }

    void MoveTail()
    {
        for (int i = 0; i < tail.Count; i++)
        {
            Vector3 temp = tail[i].position;
            tail[i].position = lastPos;
            lastPos = temp;
        }
        if (growingPending) CreateTail();
    }
    IEnumerator MoveCoroutine()
    {
        while (true)
        {
            yield return new WaitForSeconds(0.5f);
            Move();
        }
    }

    private void OnTriggerEnter2D(Collider2D collision)
    {
        string tag = collision.gameObject.tag;
        if (tag == "Food")
        {
            print("colision");
            growingPending = true;
            Destroy(collision.gameObject);
            CreateFood();
        }
        else if (tag == "Limit" || tag == "Tail")
        {
            UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");
        }
    }
    void CreateTail()
    {
        GameObject newTail = Instantiate(tailPrefab, lastPos, Quaternion.identity);
        newTail.name = "Tail_" + tail.Count;
        tail.Add(newTail.transform);
        growingPending = false;
    }

    void CreateFood()
    {
        Vector2 pos = new Vector2(Random.Range(leftSide.transform.position.x, rightSide.transform.position.x), Random.Range(topSide.transform.position.y, bottomSide.transform.position.y));
        
        Instantiate(foodPrefab, pos, Quaternion.identity);
    }
}

