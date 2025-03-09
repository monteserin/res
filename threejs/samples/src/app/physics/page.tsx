"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";
import { Physics, RigidBody } from "@react-three/rapier";

const page = () => {
  return (
    <Canvas camera={{ position: [3, 3, 3] }}>
      <OrbitControls />
      <Physics>
        <RigidBody>
          <mesh>
            <boxGeometry />
            <meshBasicMaterial color="green" />
          </mesh>
        </RigidBody>

        <RigidBody type="fixed">
          <mesh position-y={-5}>
            <boxGeometry args={[20, 0.5, 20]} />
            <meshBasicMaterial color="mediumpurple" />
          </mesh>
        </RigidBody>
      </Physics>
    </Canvas>
  );
};

export default page;
