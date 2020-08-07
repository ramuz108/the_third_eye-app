package com.example.thethirdeye;

import android.app.Application;

public class Globals extends Application {
    private String data="192.168.10.8";

    public String getData(){
        return this.data;
    }

    public void setData(String d){
        this.data=d;
    }
}
