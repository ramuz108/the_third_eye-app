//Author: Ramachandran A Dr.Gireeshan MG
//Class to save the global ip address throughout the application instance
package com.example.thethirdeye;

import android.app.Application;

public class Globals extends Application {
    private String data=""; //initialized the variable

    public String getData(){       //getter
        return this.data;
    }

    public void setData(String d){ //setter
        this.data=d;
    }
}
