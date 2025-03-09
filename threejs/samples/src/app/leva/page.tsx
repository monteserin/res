"use client";
import { useRef } from "react";
import { Canvas } from "@react-three/fiber";
import { useHelper } from "@react-three/drei";
import * as THREE from "three";

const page = () => {
  const ref = useRef();
  useHelper(ref, THREE.BoxHelper, "red");

  const { position } = useControls({
    position: {
      x: 0,
      y: 0,
      z: 0,
    },
  });

  return (
    <Canvas>
      <mesh ref={ref} position={[position.x, position.y, position.z]}>
        <boxGeometry />
        <meshBasicMaterial color="white" transparent opacity={0} />
      </mesh>
    </Canvas>
  );
};

export default page;
