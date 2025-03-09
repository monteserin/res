using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class GameManager : MonoBehaviour
{
  public Sprite[] faces;
  int points;
  public GameObject pointsGO;
  public GameObject timeGO;
  int time = 9;

  void Start()
  {
    NewGame();
    StartCoroutine(DecreaseTime());
  }

  void NewGame()
  {
    int f1 = Random.Range(0, faces.Length);
    GameObject.Find("Face1").GetComponent<SpriteRenderer>().sprite = faces[f1];

    int f2 = Random.Range(0, faces.Length);
    while (f2 == f1) f2 = Random.Range(0, faces.Length);
    GameObject.Find("Face2").GetComponent<SpriteRenderer>().sprite = faces[f2];

    int f3 = Random.Range(0, faces.Length);
    while (f3 == f1 || f3 == f2) f3 = Random.Range(0, faces.Length);
    GameObject.Find("Face3").GetComponent<SpriteRenderer>().sprite = faces[f3];


    //De momento la imágen superior coincidir con la primera de las de abajo
    int[] avaiableFaces = new int[3] { f1, f2, f3 };
    GameObject.Find("TopFace").GetComponent<SpriteRenderer>().sprite = faces[avaiableFaces[Random.Range(0, 3)]];

    time = 9;

  }

  public void UpdatePoints()
  {
    points++;
    pointsGO.GetComponent<TextMeshPro>().text = "" + points;
    NewGame();

  }

  IEnumerator DecreaseTime()
  {
    while (true)
    {
      yield return new WaitForSeconds(1.0f);
      time--;
      timeGO.GetComponent<TextMeshPro>().text = "" + time;
      if(time == 0)
      {
        UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");

      }
    }


  }
}
