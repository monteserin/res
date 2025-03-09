using System.Collections;
using System.Collections.Generic;
using UnityEngine;

using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Photon.Pun;
using UnityEngine.UI;
namespace Photon.Pun.Demo.PunBasics
{
	public class GameManager : MonoBehaviourPunCallbacks
	{
		private GameObject player1;
		private GameObject player2;
		public Transform player1Position;
		public Transform player2Position;

		void Start()
		{
			if (PlayerManager.LocalPlayerInstance == null)
			{
				if (PhotonNetwork.IsMasterClient)
				{
					player1 = PhotonNetwork.Instantiate("Player", player1Position.transform.position, player1Position.transform.rotation, 0);
				}
				else
				{
					player2 = PhotonNetwork.Instantiate("Player", player2Position.transform.position, player2Position.transform.rotation, 0);
				}
			}
		}
	}
}
