"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";
import { Physics, RigidBody } from "@react-three/rapier";
import Player from "./player";
const page = () => {
  return (
    <Canvas camera={{ position: [3, 3, 3] }}>
      <OrbitControls />
      <Physics>
        <Player />
        <RigidBody>
          <mesh>
            <boxGeometry />
            <meshBasicMaterial color="green" />
          </mesh>
        </RigidBody>
      </Physics>
    </Canvas>
  );
};

export default page;
