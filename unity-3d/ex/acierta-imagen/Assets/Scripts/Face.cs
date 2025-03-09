/**/using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Face : MonoBehaviour
{
  GameManager gm;

  void Start()
  {
    gm = GameObject.Find("GameManager").GetComponent<GameManager>();
  }

  private void OnMouseDown()
  {
    Sprite clickedFace = GetComponent<SpriteRenderer>().sprite;
    Sprite rightFace = GameObject.Find("TopFace").GetComponent<SpriteRenderer>().sprite;
    if (clickedFace == rightFace)
    {
      print("coinciden");
      gm.UpdatePoints();
    }
    else
    {
      UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");
    }
  }
}
