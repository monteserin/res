package com.hibernate.listeners;

import org.hibernate.HibernateException;
import org.hibernate.event.spi.LoadEvent;
import org.hibernate.event.spi.LoadEventListener;


public class MyLoadListener implements LoadEventListener {
    // this is the single method defined by the LoadEventListener interface
    public void onLoad(LoadEvent event, LoadEventListener.LoadType loadType)
            throws HibernateException {
    	
    	System.out.println("Mostramos la entidad consultada utilizando un listener" + event.getEntityClassName());
        if ( event.getEntityClassName().equals("Libro")) {
        	// event.getEntityId() ) ) {
        }
            
        
    }
}