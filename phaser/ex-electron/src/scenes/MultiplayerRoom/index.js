import Phaser from 'phaser';
import form from './assets/forms/main.html';
import { createRoom, getRoomById } from './services/room';

class MultiplayerRoom extends Phaser.Scene {
    constructor() {
        super('MultiplayerRoom');
    }

    preload() {
        this.load.html('roomForm', form);
    }

    create() {
        const f = async () => {
            const currentRoomId = await createRoom();
            const form = this.add.dom(400, 300).createFromCache('roomForm');
            form.addListener('click');
            form.getChildByID('currentRoomId').textContent = currentRoomId;

            form.on('click', async (event) => {
                if (event.target.name === 'conectar') {
                    const roomId = form.getChildByName('roomId').value;
                    const room = await getRoomById(roomId);
                    if (!room) {
                        alert('No existe una room con este id')
                    } else {
                        this.scene.start('Karate');
                    }
                }
            });
        }
        f();



    }
}

export default MultiplayerRoom;