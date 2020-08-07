package com.example.thethirdeye;

import android.content.Intent;
import android.os.Bundle;

import com.google.android.material.floatingactionbutton.FloatingActionButton;
import com.google.android.material.snackbar.Snackbar;
import com.hanks.passcodeview.PasscodeView;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.view.View;
import android.widget.Toast;

public class passview extends AppCompatActivity {
PasscodeView passcodeView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_passview);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        PasscodeView passcodeView = (PasscodeView) findViewById(R.id.passcodeView);
        passcodeView
                .setPasscodeLength(4)
                .setLocalPasscode("9749")
                .setListener(new PasscodeView.PasscodeViewListener() {
                    @Override
                    public void onFail() {
                       Toast.makeText(getApplication(),"You cant enter third eye with that password !!!!",Toast.LENGTH_LONG).show();
                    }

                    @Override
                    public void onSuccess(String number) {
                      Intent i = new Intent(getApplication(),front_screen.class);
                      startActivity(i);
                    }
                });

    }
}