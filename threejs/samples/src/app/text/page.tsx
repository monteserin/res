"use client";
import { Canvas } from "@react-three/fiber";
import { MeshReflectorMaterial, OrbitControls, Text } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />
      <Text font={"fonts/Runtoe.ttf"}>
        Love is {"\n"}in the air
        <meshBasicMaterial color="brown" />
      </Text>
    </Canvas>
  );
};

export default page;
