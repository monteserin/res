using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Ball : MonoBehaviour
{
  Vector3 initPosition;
  GameManager gameManager;
  int ultCheckpoint = 0;
  Transform padreCheckpoints;

  public int numberOfNumber;
  public Ball[] ballsIfHasMoreThanTwoBalls;

  private bool _partCompleted;

  public bool partCompleted
  {
    get { return _partCompleted; }
    set { _partCompleted = value; }
  }



  private void Start()
  {
    initPosition = transform.position;
    ballsIfHasMoreThanTwoBalls = transform.parent.parent.GetComponentsInChildren<Ball>();

    gameManager = GameObject.Find("GameManager").GetComponent<GameManager>();
    padreCheckpoints = transform.parent.Find("collidersRecorrido");

  }
  void OnTriggerExit2D(Collider2D col)
  {
    if (col.name == "ballMovement")
    {
      Perdemos();
    }
  }


  void Perdemos()
  {
    gameManager.estaPulsado = false;
    transform.position = initPosition;
    ultCheckpoint = 0;
  }
  void OnTriggerEnter2D(Collider2D col)
  {
    if (col.CompareTag("checkpoint") && col.transform.parent == padreCheckpoints)
    {
      int numCheckpoint = int.Parse(col.name);

      Debug.Log(numCheckpoint);
      if (numCheckpoint == ultCheckpoint || numCheckpoint == ultCheckpoint + 1)
      {
        ultCheckpoint = numCheckpoint;


        // si el indice del elemento con el que hemos colisionado  es igual al número de hijos que tiene "collidersRecorrid" (restamos 1 porque se cuenta el propio elemento)
        if (col.transform.GetSiblingIndex() == col.transform.parent.childCount - 1)
        {
          partCompleted = true;

          if (ballsIfHasMoreThanTwoBalls.Length == 1 || ballsIfHasMoreThanTwoBalls.Length > 1 && areAllBallsCompleted())
          {




            Debug.Log("GANAMOS");
            gameManager.sceneNumbers[numberOfNumber] = true;

            bool allNumbersWereCompleted = true;
            for (int i = 0; i < gameManager.sceneNumbers.Length; i++)
            {
              if (gameManager.sceneNumbers[i] == false)
              {
                allNumbersWereCompleted = false;
              }
            }

            if (allNumbersWereCompleted)
            {
              Debug.Log("GANAMOS LA ESCENA");
              gameManager.GoToNextScene();


            }
          }
        }

      }
      else
      {
        //	Perdemos();
      }

    }
  }

  private bool areAllBallsCompleted()
  {
    bool allBallsAreCompleted = true;
    for (int i = 0; i < ballsIfHasMoreThanTwoBalls.Length; i++)
    {
      if (ballsIfHasMoreThanTwoBalls[i].partCompleted != true)
      {
        allBallsAreCompleted = false;
      }
    }
    Debug.Log("allBallsAreCompleted:" + allBallsAreCompleted);
    return allBallsAreCompleted;
  }
}
