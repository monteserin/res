"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";
import * as THREE from "three";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <mesh rotation-y={Math.PI / 4} rotation-z={THREE.MathUtils.degToRad(30)}>
        <boxGeometry />
        <meshBasicMaterial color="green" />
      </mesh>
    </Canvas>
  );
};

export default page;
