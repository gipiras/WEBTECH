package controllers;

import play.*;
import play.mvc.*;
import play.db.*;
import java.sql.*;
import javax.sql.*;
import play.libs.Json;
import play.data.DynamicForm;
import org.codehaus.jackson.node.ObjectNode; 
import views.html.*;
import views.html._include.*;

public class Weather extends Controller {
  
  public static Result insert() {
  
    DynamicForm data = form().bindFromRequest();
    Connection conn = DB.getConnection();
		Statement query;            
    ResultSet result;
    ObjectNode respJSON = Json.newObject();
    int nextId = 0;
    try {
	      query = conn.createStatement();

        query.execute("INSERT INTO seapal.weather(latitude, longitude, temperature, wind, datum, city) "
                + "VALUES('" + data.get("latitude") + "',"
                + "'" + data.get("longitude") + "',"
                + "'" + data.get("temperature") + "',"
                + "'" + data.get("wind") + "',"
                + "'" + data.get("datum") + "',"
                + "'" + data.get("city") + "');");

         conn.close();

         respJSON.put("bnr", "" + (nextId - 1));

    } catch (Exception e) {
        respJSON.put("bnr", "Error: " + e);
    }

    return ok(respJSON);
  }
  
  public static Result load(int id) {
  
    Connection conn = DB.getConnection();
	Statement query;
    ResultSet result;
    ObjectNode respJSON = Json.newObject();

		if(conn != null)
		{
        try {
            	
	          query = conn.createStatement();
	 
	          String sql = "SELECT * FROM seapal.weather WHERE id = " + id;
	        
	          result = query.executeQuery(sql);
            java.sql.ResultSetMetaData rsmd = result.getMetaData();
            int numColumns = rsmd.getColumnCount();

            while (result.next()) {
                for (int i = 1; i < numColumns + 1; i++) {
                    String columnName = rsmd.getColumnName(i);
                    respJSON.put(columnName, result.getString(i));
                }
            }
            conn.close();

        } catch (Exception e) {
	    	   e.printStackTrace();
        }
    }
    return ok(respJSON);
  }

  public static Result index() {
	    
	  String data = loadEntries();
		
	  return ok(weather.render(header.render(), 
    						    navigation.render("app_map"), 
    						    navigation_app.render("app_weather"), 
    						    data));
  }

	public static String loadEntries() {
	
		Connection conn = DB.getConnection();
		
		String data = "";
    
		if(conn != null)
		{
            Statement query;
            ResultSet result;
            
            try {
            	
	            query = conn.createStatement();
	 
	            String sql = "SELECT * " + "FROM weather ";
	        
	            result = query.executeQuery(sql);
	        
	            while (result.next()) {
              
	        		  StringBuilder row = new StringBuilder();

                row.append("<tr class='selectable' id='" + result.getString("id") + "'>");
                row.append("<td>" + result.getString("latitude") + "</td>");
                row.append("<td>" + result.getString("longitude") + "</td>");
                row.append("<td>" + result.getString("temperature") + "</td>");
                row.append("<td>" + result.getString("wind") + "</td>");
                row.append("<td>" + result.getString("datum") + "</td>");
                row.append("<td>" + result.getString("city") + "</td>");
                row.append("<td style='width:30px; text-align:left;'><div class='btn-group'>");
                row.append("<a class='btn btn-small view' id='" + result.getString("id")
                  + "'><span><i class='icon-eye-open'></i></span></a>");
                row.append("<a class='btn btn-small remove' id='" + result.getString("id")
                  + "'><span><i class='icon-remove'></i></span></a>");
                row.append("</div></td>");

                row.append("</tr>");
            
		            data += row.toString();
			    }
               
	       } catch (Exception e) {
	    	   e.printStackTrace();
	       }
        }
            
        return data;
	}

  
}