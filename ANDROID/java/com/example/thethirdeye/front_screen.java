//Author: Ramachandran A Dr.Gireeshan MG
//Activity to set the ip address of the control station
package com.example.thethirdeye;

import android.content.Intent;
import android.os.Bundle;

import com.google.android.material.floatingactionbutton.FloatingActionButton;
import com.google.android.material.snackbar.Snackbar;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.text.TextUtils;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.EditText;
import android.widget.ImageView;

public class front_screen extends AppCompatActivity {
    ImageView img;
    EditText txt;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_front_screen);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        img = (ImageView)findViewById(R.id.imageView2);
        txt = (EditText)findViewById(R.id.ipadd);
        Animation ani = AnimationUtils.loadAnimation(this, R.anim.rotate);
        img.setAnimation(ani); //rotate animation on image
        FloatingActionButton fab = findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String dta = txt.getText().toString();
                if(TextUtils.isEmpty(dta)){
                    Snackbar.make(view, "Please enter the ip address of the control station", Snackbar.LENGTH_LONG)
                            .setAction("Action", null).show();
                }
                else
                {
                    Globals g = (Globals)getApplication();
                    g.setData(dta); //sets the ip address to the global variable
                    Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                    startActivity(intent); //start the main activity


                }

            }
        });
    }
    @Override
    public void onBackPressed() {
        this.finishAffinity();
    }
}
