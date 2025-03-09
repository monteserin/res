package com.pablomonteserin.variables;

public class Finalize  {
	    protected void finalize() {
	        System.out.println("Removed");
	    }
	    public static void main(String[] args) {
	        Finalize finalizeObject = new Finalize();
	        finalizeObject = null;
	        System.gc();
	    }
 }