using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class SceneChanger : MonoBehaviour
{
    //Escena 1 es intro
    //Escena 2 es el lobby
    //Escena 3 es el juego matematico
    void OnTriggerEnter(Collider other)
    {
        SceneManager.LoadScene(2);
    }
}
