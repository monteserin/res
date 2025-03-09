using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameOver : MonoBehaviour
{
  void OnMouseDown()
  {
    UnityEngine.SceneManagement.SceneManager.LoadScene("Init");

  }
}
