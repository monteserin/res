using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Door : MonoBehaviour
{
    public int sceneId;

    private void OnMouseDown()
    {
        UnityEngine.SceneManagement.SceneManager.LoadScene(sceneId);
    }
}
