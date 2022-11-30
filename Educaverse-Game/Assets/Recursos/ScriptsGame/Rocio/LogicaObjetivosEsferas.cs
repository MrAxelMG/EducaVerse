using System.Collections;
using System.Collections.Generic;
using UnityEngine;
//Importante
using UnityEngine.UI;
using TMPro;

public class LogicaObjetivosEsferas : MonoBehaviour
{
    public int numDeObjetivos;
    public TextMeshProUGUI textoMision;
    public GameObject botonDeMision;

    // Start is called before the first frame update
    void Start()
    {
        numDeObjetivos = GameObject.FindGameObjectsWithTag("objetivo").Length;
            textoMision.text = "Recoge los objetos perdidos de rocio" + 
                            "\n Restantes: " + numDeObjetivos;    
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
            textoMision.text = "Obten las esferas rojas" +
                                "\n Restantes: " + numDeObjetivos;
            if (numDeObjetivos <= 0)
            {
                textoMision.text = "Completaste la Misión";
                botonDeMision.SetActive(true);
            }
        }
    }
}
