//Author: Ramachandran A Dr.Gireeshan MG
//Main Activity which listens for alarms
package com.example.thethirdeye;

import android.app.NotificationChannel;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Context;
import android.content.Intent;
import android.graphics.Color;
import android.media.AudioManager;
import android.media.MediaPlayer;
import android.media.ToneGenerator;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;

import com.google.android.material.floatingactionbutton.FloatingActionButton;
import com.google.android.material.snackbar.Snackbar;
import com.skyfishjy.library.RippleBackground;
import com.sun.mail.pop3.POP3Store;
import com.tapadoo.alerter.Alerter;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.core.app.NotificationCompat;
import androidx.core.app.NotificationManagerCompat;

import android.os.Handler;
import android.os.StrictMode;
import android.os.Vibrator;
import android.util.Log;
import android.view.View;

import android.view.Menu;
import android.view.MenuItem;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.view.animation.LinearInterpolator;
import android.view.animation.RotateAnimation;
import android.widget.ImageView;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONObject;

import java.io.Console;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.time.Duration;
import java.time.LocalTime;
import java.time.temporal.ChronoUnit;
import java.util.Calendar;
import java.util.Date;
import java.util.Locale;
import java.util.Properties;
import java.util.concurrent.TimeUnit;

import javax.mail.Authenticator;
import javax.mail.Folder;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.NoSuchProviderException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Store;
import javax.mail.internet.MimeMessage;

import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

public class MainActivity extends AppCompatActivity {
    ImageView img;
    MediaPlayer mp;
    String data;
    NotificationCompat.Builder notification_builder;
    NotificationManagerCompat notification_manager;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        img = (ImageView)findViewById(R.id.imageView);
        Log.e("MAIN","INSIDE MAIN");
        Globals g = (Globals)getApplication();
        data=g.getData(); //retrieve the ip address of the control station
        Log.e("GLOBAL",data);
        createNotificationChannel();
        final RippleBackground rippleBackground=(RippleBackground)findViewById(R.id.content);
        rippleBackground.startRippleAnimation(); //custom ripple animation on image
        Handler handler1 = new Handler();
        int i;
        for( i = 0; i <=1000; i++) {               //retrieve the data from the control station every 10 seconds
            handler1.postDelayed(new Runnable() {

                @Override
                public void run() {
                    try {
                        getHttpResponse();
                    } catch (Exception e) {
                        Toast.makeText(getApplicationContext(), "err:" + e.getMessage().toString(), Toast.LENGTH_LONG).show();
                    }
                }
            }, 20000 * i);
        }
    }
    private void openmap()
    {
        Intent intent = new Intent(android.content.Intent.ACTION_VIEW,
                Uri.parse("http://maps.google.com/maps?daddr=10.6300,76.6186")); //open navigation to the latlon [latlon hardcoded as of now]
        startActivity(intent);
    }
    private void createNotificationChannel() { //set the notification channel
        NotificationManager notification_manager = (NotificationManager) this
                .getSystemService(Context.NOTIFICATION_SERVICE);
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            String chanel_id = "3000";
            CharSequence name = "Channel Name";
            String description = "Chanel Description";
            int importance = NotificationManager.IMPORTANCE_LOW;
            NotificationChannel mChannel = new NotificationChannel(chanel_id, name, importance);
            mChannel.setDescription(description);
            mChannel.enableLights(true);
            mChannel.setLightColor(Color.BLUE);
            notification_manager.createNotificationChannel(mChannel);
            notification_builder = new NotificationCompat.Builder(this, chanel_id);
        } else {
            notification_builder = new NotificationCompat.Builder(this);
        }


    }

    public void getHttpResponse() throws IOException {

        String url = "http://"+data+"/androidcom.php"; //connector to the control station

        OkHttpClient client = new OkHttpClient();

        Request request = new Request.Builder()
                .url(url)
                .header("Accept", "application/json")
                .header("Content-Type", "application/json")
                .build();

        client.newCall(request).enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                String mMessage = e.getMessage().toString();
                Log.e("failure Response", mMessage);
                //call.cancel();
                Toast.makeText(getApplicationContext(),"Failed to retrieve from the control station:"+mMessage,Toast.LENGTH_LONG).show();
            }

            @RequiresApi(api = Build.VERSION_CODES.O)
            @Override
            public void onResponse(Call call, Response response) throws IOException {

                String mMessage = response.body().string();

                Log.e("RESP#####", mMessage);
                try
                {
                    JSONObject  jsonRootObject = new JSONObject(mMessage);
                    JSONArray jsonArray = jsonRootObject.optJSONArray("data");
                    for(int i=0; i < jsonArray.length(); i++){
                        JSONObject jsonObject = jsonArray.getJSONObject(i);
                        String alarm = jsonObject.optString("alarm").toString();
                        String time =  jsonObject.optString("time").toString();
                        LocalTime start = LocalTime.parse( time) ;
                        Calendar calendar = Calendar.getInstance();
                        SimpleDateFormat mdformat = new SimpleDateFormat("HH:mm:ss");
                        String now =  mdformat.format(calendar.getTime());
                        LocalTime stop = LocalTime.parse(now) ;
                        long secs = ChronoUnit.SECONDS.between( start , stop ) ; //filtering based  on time
                        if(secs <=60 ) //60 seconds threshold
                        {
                            Log.e("BREACH#######", ""+alarm);
                            Alerter.create(MainActivity.this)
                                    .setTitle("Breach !!!")
                                    .setText(""+alarm)
                                    .setDuration(5000)
                                    .setBackgroundColorInt(Color.RED)
                                    .setIcon(R.drawable.ic_baseline_warning_24)
                                    .show(); //show custom alert
                            Vibrator v = (Vibrator) getSystemService(Context.VIBRATOR_SERVICE);
                            v.vibrate(1000); //vibrate the device
                            openmap() //open navigation
                            notification_builder.setSmallIcon(R.drawable.ic_baseline_warning_24)
                                    .setContentTitle("Breach Detected")
                                    .setContentText(""+alarm)
                                    .setAutoCancel(true);
                            notification_manager.notify(0, notification_builder.build()); //show notification
                            mp= MediaPlayer.create(MainActivity.this,R.raw.alert);
                            try{

                                mp.start(); //play alarm sound

                            }catch(Exception e){e.printStackTrace();
                            }

                        }
                        Log.e("ALARM#####", alarm);
                        Log.e("NOW#####", ""+now);
                        Log.e("TIME#####", ""+Math.abs(secs));
                    }

                }
                catch(Exception e)
                {
                    Log.e("ERR#####", e.getMessage().toString());
                }

            }
        });
    }

    @Override
    public void onBackPressed() {
        this.finishAffinity();
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
           Toast.makeText(getApplicationContext(),"Developed by Dr.Gireeshan MG and Ramachandran A for Hack'KP 2020",Toast.LENGTH_LONG).show();
        }

        return super.onOptionsItemSelected(item);
    }
}
