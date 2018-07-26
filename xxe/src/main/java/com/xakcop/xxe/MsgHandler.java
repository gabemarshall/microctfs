package com.xakcop.xxe;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.concurrent.ConcurrentHashMap;
import java.util.Random;

import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;


@Path("/msgs")
public class MsgHandler {

    static final Map<Integer, Msg> msgs = new ConcurrentHashMap<Integer, Msg>();
    static volatile int currentId = 0;
    
    static {
        Msg msg = new Msg();
        msg.setId(5);
        msg.setContent("All systems online");
        msg.setType("Broadcast");
        msgs.put(currentId++, msg);     
    }
    
    @PUT
    @Consumes(MediaType.APPLICATION_XML)
    public String createMsg(Msg msg) {
        Random rand = new Random();

        int randomNum = rand.nextInt((1000000000 - 1) + 1) + 1;
        msg.setId(randomNum);
        System.out.println(msg.type);
        msgs.put(currentId++, msg);
        System.out.println(randomNum);
        return "<html>[+] Message "+randomNum+" saved [+]</html>";

    }
    
    @GET
    @Path("{id}")
    @Produces(MediaType.APPLICATION_XML)
    public List<Msg> retrieveMsg(@PathParam("id") int id) {
        System.out.println("[+] Debug => "+id+" retrieved..");
        List<Msg> result = new ArrayList<Msg>();
        for (Map.Entry<Integer, Msg> entry : msgs.entrySet()) {
            if (id == entry.getValue().id){
               result.add(entry.getValue()); 
            }
        }
        return result;
    }

}
