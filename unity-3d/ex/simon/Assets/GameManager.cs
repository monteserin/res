using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using TMPro;

public class GameManager : MonoBehaviour
{
    private GameObject[] btns;
    private List<GameObject> currentBtns;

    private int currentAudioLength = 1;
    private int currentAudioIndex;
    private bool blockedControls = false;

    void Start()
    {
        btns = GameObject.FindGameObjectsWithTag("Btn");
        SetRandomAudioSources();
        StartCoroutine(PlaySounds());
    }


    public void CheckClickedAudioSource(AudioSource audioSource)
    {
        if (!blockedControls)
        {
            if (currentBtns[currentAudioIndex].GetComponent<AudioSource>().clip.name == audioSource.clip.name)
            {
                currentAudioIndex++;
                Debug.Log("ACIERTO");
                Debug.Log(GameObject.Find("Text").GetComponent<TextMeshProUGUI>());
                GameObject.Find("Text").GetComponent<TextMeshProUGUI>().text = "" + currentAudioIndex;
            }
            else
            {
                currentAudioIndex = 0;
                StartCoroutine(Fail());
            }
            Debug.Log("currentAudioIndex" + currentAudioIndex + " - currentAudioLength: " + currentAudioLength);
            if (currentAudioIndex == currentAudioLength)
            {
                currentAudioLength++;
                currentAudioIndex = 0;
                SetRandomAudioSources();
                StartCoroutine(Victory());
            }
        }
    }
    private void SetRandomAudioSources()
    {
        currentBtns = new List<GameObject>();
        for (int i = 0; i < currentAudioLength; i++)
        {
            int randomNumber = Random.Range(0, btns.Length);
            GameObject randomObj = btns[randomNumber];
            currentBtns.Add(randomObj);
        }
    }

    IEnumerator PlaySounds()
    {
        blockedControls = true;
        for (int i = 0; i < currentBtns.Count; i++)
        {
            Color c = currentBtns[i].GetComponent<Image>().color;
            yield return new WaitForSeconds(0.5f);
            currentBtns[i].GetComponent<AudioSource>().Play();
            currentBtns[i].GetComponent<Image>().color = Color.red;
            yield return new WaitForSeconds(0.5f);
            currentBtns[i].GetComponent<Image>().color = c;
        }
        blockedControls = false;
    }

    IEnumerator Victory()

    {
        GameObject t = GameObject.Find("Text");
        t.GetComponent<TextMeshProUGUI>().enabled = false;
        GameObject.Find("Exito").GetComponent<Image>().enabled = true;
        yield return new WaitForSeconds(1f);

          
          t.GetComponent<TextMeshProUGUI>().enabled = true;
          GameObject.Find("Exito").GetComponent<Image>().enabled = false;
        
          StartCoroutine(PlaySounds());
    }

    IEnumerator Fail()

    {
        GameObject t = GameObject.Find("Text");
        t.GetComponent<TextMeshProUGUI>().enabled = false;
        GameObject.Find("Fail").GetComponent<Image>().enabled = true;
        yield return new WaitForSeconds(1f);

   
        t.GetComponent<TextMeshProUGUI>().enabled = true;
        GameObject.Find("Fail").GetComponent<Image>().enabled = false;

        StartCoroutine(PlaySounds());
    }

}
