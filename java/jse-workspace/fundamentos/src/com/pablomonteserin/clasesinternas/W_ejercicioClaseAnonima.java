package com.pablomonteserin.clasesinternas;
class A {
public String toString() {
return "4";
}
}
class B extends A {
public String toString() {
return super.toString() + "3";
}
}
public class W_ejercicioClaseAnonima {
public static void main (String[] args) {
System.out.println(new B());
}
}