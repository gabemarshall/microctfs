#include <stdio.h>
#include <stdlib.h>
#include <fcntl.h>

char secret[27] = "Und3r$tanDing1nAK3rn4lCrA$h";

void start_shell(){
    gid_t gid = getegid();
    setresgid(gid, gid, gid);
    system("/bin/sh -i");
}

int main(int argc, char **argv){
    char *ptr = secret;
    printf("Debug mode enabled.. pointer set to ");
    printf("%x", secret);
    printf("\n");
    char str[50];

    printf("Welcome to EverSec interactive login.\nEnter the secret password to continue.\n");
    gets(str);
    printf(str);
    printf("\n");

    if (strcmp(str,secret) == 0){
      printf("Correct password, initializing shell access\n");
      start_shell();
    }
    else {
      printf("Incorrect password entered.\n");
    }


    return 0;
}
