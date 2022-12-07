using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class ResetGameButton : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
   public void ResetTheGame()
    {
    SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex);     
    print("The button is working");
    // SceneManager.LoadScene(0);
    }
}
