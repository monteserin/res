using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    public GameObject enemyPrefab;
    void Start()
    {
        StartCoroutine(CreateEnemy());
    }

    IEnumerator CreateEnemy()
    {
        while (true)
        {
            yield return new WaitForSeconds(1.0f);
            int n = Random.Range(0, 2);
            float y = Random.Range(Utils.Get0Height(), Utils.GetScreenHeight());
            GameObject enemy = Instantiate(enemyPrefab, new Vector3(n == 0 ? Utils.GetRightSide() : Utils.GetLeftSide(), y), Quaternion.identity);
            enemy.GetComponent<Enemy>().posEnd = new Vector2(n == 0 ? Utils.GetLeftSide() : Utils.GetRightSide(), y);
            enemy.GetComponent<SpriteRenderer>().flipX = n != 0;

        }

    }

}
