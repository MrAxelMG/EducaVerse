using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class IntroScn : MonoBehaviour

  {
    //Escena 0 es intro
    //Escena 1 es el lobby
    //Escena 2 es el bosque
    void OnTriggerEnter(Collider other)
    {
        SceneManager.LoadScene(1);
    }
  }

