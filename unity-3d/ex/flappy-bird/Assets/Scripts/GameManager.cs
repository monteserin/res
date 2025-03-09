using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    public GameObject pipePrefab;
    public Transform back;
    float speed = 1;
    float backgroundSize;
    float xBreakPoint;
    void Start()
    {

        Sprite backSprite = back.GetComponent<SpriteRenderer>().sprite;
        backgroundSize = back.localScale.x * backSprite.texture.width / backSprite.pixelsPerUnit;
        xBreakPoint = back.position.x - (backgroundSize / 2);


        StartCoroutine(CreatePipes());
    }
    void Update()
    {
        MoveBackground();
    }
    IEnumerator CreatePipes()
    {
        while (true)
        {
            int yPosition = Random.Range(-3, 3);
            GameObject newPipe = Instantiate(pipePrefab, new Vector2(Utils.GetRightSide(), yPosition), Quaternion.identity);
            newPipe.name = "Pipe";
            yield return new WaitForSeconds(3.0f);
        }
    }

    void MoveBackground()
    {
        back.Translate(-speed * Time.deltaTime, 0, 0);
        if (back.position.x <= xBreakPoint) back.Translate(backgroundSize * Mathf.Abs(back.localScale.x), 0, 0);
    }
}