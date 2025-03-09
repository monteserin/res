import { useRef } from "react";
import { Physics, RigidBody } from "@react-three/rapier";
import { Vector3 } from "three";
import { useKeyboardControls } from "@react-three/drei";
const MOVEMENT_SPEED = 0.5;

const Player = () => {
  const rb = useRef();

  const x = useKeyboardControls();
  console.log(111111, x);
  const impulse = new Vector3();
  useFrame(() => {
    impulse.x = 0;
    impulse.y = 0;
    impulse.z = 0;
    if (get()[Controls.forward]) {
      impulse.z -= MOVEMENT_SPEED;
    }
    if (get()[Controls.back]) {
      impulse.z += MOVEMENT_SPEED;
    }
    if (get()[Controls.left]) {
      impulse.x -= MOVEMENT_SPEED;
    }
    if (get()[Controls.right]) {
      impulse.x += MOVEMENT_SPEED;
    }
    if (get()[Controls.jump]) {
    }
    rb.current.applyImpulse(impulse, true);
  });
  return <RigidBody ref={rb}>{/* ... */}</RigidBody>;
};

export default Player;
