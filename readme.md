sudo apt install xbindkeys php
git clone git@github.com:jgadd/linux_audio_switcher.git
cd linux_audio_switcher
cp ./* ~/
xbindkeys

Edit switch_audio_output.php to make your audio outputs.
Press ctrl + alt + a to swap between your devices.
Edit .xbindkeysrc if you prefer a different shortcut.