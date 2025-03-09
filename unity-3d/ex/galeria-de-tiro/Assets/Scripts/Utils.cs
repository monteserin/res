using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Utils : MonoBehaviour
{
    public static float GetLeftSide()
    {
        return Camera.main.ScreenToWorldPoint(Vector2.zero).x;
    }

    public static float GetRightSide()
    {
        return Camera.main.ScreenToWorldPoint(new Vector2(Screen.width, 0)).x;
    }

    public static float Get0Height()
    {
        return Camera.main.ScreenToWorldPoint(Vector2.zero).y;
    }

    public static float GetScreenHeight()
    {
        return Camera.main.ScreenToWorldPoint(new Vector2(0, Screen.height)).y;
    }

    public static float GetAnimationClipTime(Animator animator, string animationName)
    {
        float time = 0;
        RuntimeAnimatorController ac = animator.runtimeAnimatorController;
        for (int i = 0; i < ac.animationClips.Length; i++)
        {
            if (ac.animationClips[i].name == animationName)
            {
                time = ac.animationClips[i].length;
                return time;
            }
        }
        return time;
    }
}
