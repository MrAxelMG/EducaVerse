using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TeleporterPlate : MonoBehaviour
{
 
    public Transform teleportTarget;
    public GameObject thePlayer;
    // public Player

    void OnTriggerEnter(Collider other)
    {
        thePlayer.transform.position = teleportTarget.transform.position;
    }
}
