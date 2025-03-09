using System.Collections;
using System.Collections.Generic;
using Photon.Pun;
using Photon.Realtime;
using UnityEngine;
using UnityEngine.UI;
using TMPro;
namespace Photon.Pun.Demo.PunBasics
{
    public class AutoLobby : MonoBehaviourPunCallbacks
    {
        public Button buttonJoinRoom;
        public Button buttonLoadArena;
        public TextMeshProUGUI nombre;
        public TextMeshProUGUI Log;
        public TextMeshProUGUI PlayerCount;
        public int playersCount;

        public byte maxPlayersPerRoom = 4;
        public byte minPlayersPerRoom = 2;
        private string roomName = "amor";


        void Start()
        {
            // La IP del servidor al que se conectar� el player ser� almacenada en las PlayerPrefs.
            // Debemos resetear las PlayerPrefs para evitar ciertos problemas de conexi�n
            PlayerPrefs.DeleteAll();
            ConnectToPhoton();
        }

        void Awake()
        {
            // La siguiente l�nea nos permite sincronizar la escena para todos los players de la room
            PhotonNetwork.AutomaticallySyncScene = true;
        }

        void ConnectToPhoton()
        {
            Log.text = "Connecting...";
            PhotonNetwork.GameVersion = "" + 1; //1
            if (PhotonNetwork.ConnectUsingSettings())
            {
                Log.text += "\n Connected to server";
            }
            else
            {
                Log.text += "\n Falling Connecting to Server";
            }
        }

        // Photon Methods
        public override void OnConnected()
        {
            base.OnConnected();
            Log.text += "\nConnected to Photon!";

            buttonJoinRoom.interactable = true;
            buttonLoadArena.interactable = false;
        }

        public void JoinRoom()
        {
            Log.text += "\nJoinRoom() method";

            if (PhotonNetwork.IsConnected)
            {
                PhotonNetwork.LocalPlayer.NickName = nombre.GetComponent<TextMeshProUGUI>().text; //1
                Log.text += "\nPhotonNetwork.IsConnected! | Trying to Create/Join Room ";
                RoomOptions roomOptions = new RoomOptions(); //2
                TypedLobby typedLobby = new TypedLobby(roomName, LobbyType.Default); //3
                PhotonNetwork.JoinOrCreateRoom(roomName, roomOptions, typedLobby); //4

                Log.text += "\nFin JoinRoom(): " + PhotonNetwork.LocalPlayer.NickName;
            }
        }

        public override void OnJoinedRoom()
        {
            if (PhotonNetwork.IsMasterClient)
            {
                buttonJoinRoom.interactable = false;
                buttonLoadArena.interactable = true;
                Log.text += "\nYour are Lobby Leader";
            }
            else
            {
                Log.text += "\nConnected to Lobby";
            }
        }

        public void LoadArena()
        {
            if (PhotonNetwork.CurrentRoom.PlayerCount > 1)
            {
                PhotonNetwork.LoadLevel("Game");
            }
            else
            {
                Log.text += "\nMinimum 2 Players required to Load Arena!";
            }
        }

        void Update()
        {
            if (PhotonNetwork.InRoom)
            {
                playersCount = PhotonNetwork.CurrentRoom.PlayerCount;
                PlayerCount.text = playersCount + "/" + maxPlayersPerRoom;
            }
        }

        public override void OnJoinRandomFailed(short returnCode, string message)
        {
            Log.text += "\nNo Rooms to Join, creating one...";
            if (PhotonNetwork.CreateRoom(null, new Photon.Realtime.RoomOptions() { MaxPlayers = maxPlayersPerRoom }))
            {
                Log.text += "\n Room Created";
            }
            else
            {
                Log.text += "\nFail Creating Room";
            }
        }
    }
}