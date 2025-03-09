using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
  public GameObject pajarito;
  void Start()
  {
    pajarito.transform.position = new Vector3(4, 0, 0);
    Debug.Log("hola");
  }

}
