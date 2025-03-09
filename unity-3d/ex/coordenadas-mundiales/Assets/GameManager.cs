using UnityEngine;

public class GameManager : MonoBehaviour
{

  private void Start()
  {
    Vector2 topLeft = new Vector2(0, 0);
    Vector2 topRight = new Vector2(Screen.width, 0);
    Vector2 bottomRight = new Vector2(Screen.width, Screen.height);
    Vector2 bottomLeft = new Vector2(0, Screen.height);

    Vector2 topLeftWorld = Camera.main.ScreenToWorldPoint(topLeft);
    Vector2 topRightWorld = Camera.main.ScreenToWorldPoint(topRight);
    Vector2 bottomRightWorld = Camera.main.ScreenToWorldPoint(bottomRight);
    Vector2 bottomLeftWorld = Camera.main.ScreenToWorldPoint(bottomLeft);

    GameObject.Find("Cube1").transform.position = topLeftWorld;
    GameObject.Find("Cube2").transform.position = topRightWorld;
    GameObject.Find("Cube3").transform.position = bottomLeftWorld;
    GameObject.Find("Cube4").transform.position = bottomRightWorld;
  }
}
