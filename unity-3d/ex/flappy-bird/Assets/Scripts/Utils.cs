using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Utils : MonoBehaviour
{
    public static float GetRightSide()
    {
        return Camera.main.ScreenToWorldPoint(new Vector2(Screen.width, 0)).x;
    }

    public static float GetLeftSide()
    {
        return Camera.main.ScreenToWorldPoint(Vector2.zero).x;
    }
}
