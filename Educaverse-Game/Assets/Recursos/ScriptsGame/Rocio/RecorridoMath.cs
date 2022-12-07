using System.Collections;
using System.Collections.Generic;
using UnityEngine;
//Importante
using UnityEngine.UI;
using TMPro;

public class RecorridoMath : MonoBehaviour
{
    public int numDeObjetivos;
    public TextMeshProUGUI textoMision;
    public GameObject botonDeMision;

    // Start is called before the first frame update
    void Start()
    {
        numDeObjetivos = GameObject.FindGameObjectsWithTag("objetivo").Length;
            textoMision.text = "Llega al portal obteniendo las respuestas correctas." + 
                            "\n Casillas por completar Correctamente: " + numDeObjetivos;    
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    void OnTriggerEnter(Collider col)
    {
        if (col.gameObject.tag == "objetivo")
        {
            Destroy(col.transform.parent.gameObject);
            numDeObjetivos--;
            textoMision.text = "llega al portal obteniendo las respuestas correctas." +
                                "\n Casillas por completar Correctamente: " + numDeObjetivos;
            if (numDeObjetivos <= 0)
            {
                textoMision.text = "Lo lograste !";
                // botonDeMision.SetActive(true);
            }
        }
    }
}